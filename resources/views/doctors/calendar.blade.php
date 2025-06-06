@extends('layouts.app')

@section('content')
<div class="calendar-container">
    <div class="calendar-header">
        <h2>📅 Calendar of {{ $doctor->name }}</h2>
        <p class="doctor-specialty">Specialty: <strong>{{ $doctor->speciality }}</strong></p>
    </div>

    <div class="calendar-navigation">
        <button id="prevMonth" class="nav-btn">&lt; Previous</button>
        <h3 id="currentMonthYear" class="month-year"></h3>
        <button id="nextMonth" class="nav-btn">Next &gt;</button>
    </div>

    <div class="calendar-grid">
        <div class="weekday">Sun</div>
        <div class="weekday">Mon</div>
        <div class="weekday">Tue</div>
        <div class="weekday">Wed</div>
        <div class="weekday">Thu</div>
        <div class="weekday">Fri</div>
        <div class="weekday">Sat</div>
        <div id="calendar-days" class="calendar-days"></div>
    </div>

    <div id="appointment-details" class="appointment-details">
        <h3>Appointments for <span id="selected-date"></span></h3>
        <div id="appointments-list"></div>
    </div>

    <div class="calendar-footer">
        <div class="legend">
            <div class="legend-item">
                <div class="color-box available"></div>
                <span>Available</span>
            </div>
            <div class="legend-item">
                <div class="color-box booked"></div>
                <span>Booked</span>
            </div>
            <div class="legend-item">
                <div class="color-box today"></div>
                <span>Today</span>
            </div>
        </div>
        <div class="back-link">
            <a href="{{ route('doctors.index') }}" class="back-btn">← Back to Doctors</a>
        </div>
    </div>
</div>

<style>
.calendar-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Arial', sans-serif;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.calendar-header {
    text-align: center;
    margin-bottom: 20px;
}

.calendar-header h2 {
    color: #00D3AF;
    margin-bottom: 5px;
    font-size: 28px;
}

.doctor-specialty {
    color: #555;
    font-size: 18px;
    margin-bottom: 20px;
}

.calendar-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.nav-btn {
    background-color: #00D3AF;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.nav-btn:hover {
    background-color: #00B38F;
}

.month-year {
    font-size: 20px;
    color: #333;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
    margin-bottom: 20px;
}

.weekday {
    text-align: center;
    font-weight: bold;
    padding: 10px;
    background-color: #f0f0f0;
    color: #555;
}

.calendar-days {
    display: contents;
}

.day {
    height: 80px;
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
    position: relative;
    background-color: #f9f9f9;
    cursor: pointer;
    transition: background-color 0.2s;
}

.day:hover {
    background-color: #f0f0f0;
}

.day-number {
    font-weight: bold;
    margin-bottom: 5px;
}

.day.other-month {
    color: #ccc;
    background-color: #f5f5f5;
    cursor: default;
}

.day.today {
    background-color: #e6fff8;
    border: 2px solid #00D3AF;
}

.day.has-appointments {
    background-color: #ffebeb;
}

.day.selected {
    background-color: #e0f7ff;
    border: 2px solid #0099cc;
}

.appointment-details {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    display: none;
}

.appointment-details h3 {
    color: #333;
    margin-bottom: 15px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.appointment-item {
    background-color: white;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.appointment-patient {
    margin: 5px 0;
    font-weight: bold;
}

.appointment-message {
    color: #666;
    font-style: italic;
    margin: 5px 0;
}

.appointment-status {
    margin-top: 5px;
    font-weight: bold;
}

.status-confirmed {
    color: green;
}

.status-cancelled {
    color: red;
}

.status-pending {
    color: orange;
}

.calendar-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.legend {
    display: flex;
    gap: 15px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 5px;
}

.color-box {
    width: 15px;
    height: 15px;
    border-radius: 3px;
}

.color-box.available {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
}

.color-box.booked {
    background-color: #ffebeb;
}

.color-box.today {
    background-color: #e6fff8;
    border: 1px solid #00D3AF;
}

.back-btn {
    background-color: #00D3AF;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.back-btn:hover {
    background-color: #00B38F;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .calendar-grid {
        gap: 2px;
    }
    
    .day {
        height: 60px;
        font-size: 14px;
    }
    
    .calendar-navigation {
        flex-direction: column;
        gap: 10px;
    }
    
    .calendar-footer {
        flex-direction: column;
        gap: 15px;
    }
    
    .legend {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Appointments data from PHP - using your existing $appointments variable
    const appointments = @json($appointments);
    
    // Current date
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    
    // DOM elements
    const calendarDays = document.getElementById('calendar-days');
    const currentMonthYearElement = document.getElementById('currentMonthYear');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const appointmentDetails = document.getElementById('appointment-details');
    const selectedDateElement = document.getElementById('selected-date');
    const appointmentsList = document.getElementById('appointments-list');
    
    // Initialize calendar
    renderCalendar(currentMonth, currentYear);
    
    // Event listeners for navigation
    prevMonthButton.addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });
    
    nextMonthButton.addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });
    
    // Function to render calendar
    function renderCalendar(month, year) {
        // Clear previous calendar
        calendarDays.innerHTML = '';
        
        // Update month and year display
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        currentMonthYearElement.textContent = `${monthNames[month]} ${year}`;
        
        // Get first day of month and total days
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        // Previous month's days
        const prevMonthDays = new Date(year, month, 0).getDate();
        for (let i = firstDay - 1; i >= 0; i--) {
            const dayElement = createDayElement(prevMonthDays - i, true);
            calendarDays.appendChild(dayElement);
        }
        
        // Current month's days
        for (let i = 1; i <= daysInMonth; i++) {
            const date = new Date(year, month, i);
            const formattedDate = formatDate(date);
            
            // Check if this day has appointments using your existing data structure
            const dayAppointments = appointments.filter(app => app.date === formattedDate);
            const hasAppointments = dayAppointments.length > 0;
            
            const isToday = date.toDateString() === today.toDateString();
            
            const dayElement = createDayElement(i, false, isToday, hasAppointments);
            dayElement.dataset.date = formattedDate;
            dayElement.dataset.hasAppointments = hasAppointments;
            
            // Add click event to show appointments
            dayElement.addEventListener('click', function() {
                if (!this.classList.contains('other-month')) {
                    // Remove selected class from all days
                    document.querySelectorAll('.day').forEach(day => {
                        day.classList.remove('selected');
                    });
                    
                    // Add selected class to clicked day
                    this.classList.add('selected');
                    
                    // Show appointment details
                    showAppointmentDetails(formattedDate, dayAppointments, hasAppointments);
                }
            });
            
            calendarDays.appendChild(dayElement);
        }
        
        // Next month's days
        const totalCells = 42; // 6 rows of 7 days
        const remainingCells = totalCells - (firstDay + daysInMonth);
        for (let i = 1; i <= remainingCells; i++) {
            const dayElement = createDayElement(i, true);
            calendarDays.appendChild(dayElement);
        }
    }
    
    // Function to create a day element
    function createDayElement(dayNumber, isOtherMonth, isToday = false, hasAppointments = false) {
        const dayElement = document.createElement('div');
        dayElement.classList.add('day');
        
        if (isOtherMonth) {
            dayElement.classList.add('other-month');
        }
        
        if (isToday) {
            dayElement.classList.add('today');
        }
        
        if (hasAppointments) {
            dayElement.classList.add('has-appointments');
        }
        
        const dayNumberElement = document.createElement('div');
        dayNumberElement.classList.add('day-number');
        dayNumberElement.textContent = dayNumber;
        dayElement.appendChild(dayNumberElement);
        
        return dayElement;
    }
    
    // Function to show appointment details using your existing data structure
    function showAppointmentDetails(date, dayAppointments, hasAppointments) {
        selectedDateElement.textContent = date;
        appointmentsList.innerHTML = '';
        
        if (hasAppointments) {
            dayAppointments.forEach(appointment => {
                const appointmentItem = document.createElement('div');
                appointmentItem.classList.add('appointment-item');
                
                // Using your existing appointment structure: name, message, status
                const patientName = document.createElement('div');
                patientName.classList.add('appointment-patient');
                patientName.textContent = `Patient: ${appointment.name}`;
                
                const message = document.createElement('div');
                message.classList.add('appointment-message');
                message.textContent = `Message: ${appointment.message}`;
                
                const status = document.createElement('div');
                status.classList.add('appointment-status');
                
                // Using your existing status values
                if (appointment.status === 'Confirmé') {
                    status.classList.add('status-confirmed');
                    status.textContent = '✔ Approved';
                } else if (appointment.status === 'Annulé') {
                    status.classList.add('status-cancelled');
                    status.textContent = '✘ Cancelled';
                } else {
                    status.classList.add('status-pending');
                    status.textContent = '⏳ In Progress';
                }
                
                appointmentItem.appendChild(patientName);
                appointmentItem.appendChild(message);
                appointmentItem.appendChild(status);
                
                appointmentsList.appendChild(appointmentItem);
            });
        } else {
            // Show message if no appointments
            const noAppointments = document.createElement('p');
            noAppointments.textContent = 'No appointments for this day.';
            noAppointments.style.textAlign = 'center';
            noAppointments.style.color = '#666';
            appointmentsList.appendChild(noAppointments);
        }
        
        // Show appointment details section
        appointmentDetails.style.display = 'block';
    }
    
    // Helper function to format date as YYYY-MM-DD (matching your existing format)
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }
});
</script>
@endsection
