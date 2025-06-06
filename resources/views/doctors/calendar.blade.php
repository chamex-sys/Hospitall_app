


  
@extends('layouts.app')
 <link rel="stylesheet" href="../assets/css/maicons.css">

      <link rel="stylesheet" href="../assets/css/bootstrap.css">

      <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

      <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

      <link rel="stylesheet" href="../assets/css/theme.css">
      
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@section('content')
     
     <header>
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 text-sm">
                <div class="site-info">
                  <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                  <span class="divider">|</span>
                  <a href="#"><span class="mai-mail text-primary"></span>onehealth@gmail.com</a>
                </div>
              </div>
              <div class="col-sm-4 text-right text-sm">
                <div class="social-mini-button">
                  <a href="#"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#"><span class="mai-logo-twitter"></span></a>
                  <a href="#"><span class="mai-logo-dribbble"></span></a>
                  <a href="#"><span class="mai-logo-instagram"></span></a>
                </div>
              </div>
            </div> <!-- .row -->
          </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#a"><span class="text-primary">One</span>-Health</a>

            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
              </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false"
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\about.html" >About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\doctors.html">Doctors</a>
                </li>  
                  <li class="nav-item">
                  <a class="nav-link" href="\html\blog.html">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\contact.html">Contact</a>
                </li>
               
                @if (Route::has('login'))
                @auth 
                 <li class="nav-item">
                  <a class="nav-link" href="{{url('myappointment')}}" style="background-color:greenyellow;color:white;">My Appointments</a>
                </li>
        
                <x-app-layout></x-app-layout>

                @else 
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                </li>

@endauth
@endif

              </ul>
            </div> <!-- .navbar-collapse -->
          </div> <!-- .container -->
        </nav>
      </header>


<style>

.hero-section a.btn-primary {
    display: block;
    margin: 30px auto 0 auto; /* 30px en haut, auto à gauche et droite */
    width: 200px;
    position: relative;
    text-align: center;
}


 
.page-hero {
    background-color: rgba(0, 0, 0, 0.4); /* couche sombre */
    color: white; 
    padding: 100px 0;
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;
    position: relative;
    text-align: center;
}

.hero-section .subhead {
    font-size: 20px;
    color: white;
    font-weight: 300;
    display: block;
    margin-bottom: 20px;
}

.hero-section h1 {
    font-size: 48px;
    font-weight: 700;
    margin-top: 0;
 
    display: inline-block;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #00D1A0;
    border-color: #00B38F;
    font-weight: bold;
    font-size: 18px;
    padding: 12px 30px;
    display: inline-block;
    margin-top: 20px;
    text-align: center;
}

.btn-primary:hover {
    background-color: #00B38F;
    border-color: #00A481;
    
}

.page-section {
    padding: 60px 0;
    text-align: center;
}

.page-section h1.text-center {
    color: #00D1A0;
    font-weight: 900; /* plus solide */
    font-size: 36px; /* plus grand */
    margin-bottom: 40px;
}

#symptoms {
    width: 100%;
    max-width: 700px;
    min-height: 220px; /* un peu plus grand */
    resize: vertical;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 20px;
    font-size: 18px;
    margin: 0 auto;
    display: block;
}

form .text-center {
    margin-top: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 32px;
        padding: 8px 16px;
    }
    .btn-primary {
        width: 200px;
            display: inline-block;
    }
}

/* Footer (garde la version complète) */
.page-footer {
    background-color: #1e2d2f;
    color: #d3d3d3;
    padding: 60px 20px 30px;
    font-size: 15px;
}

.page-footer .container {
    max-width: 1200px;
    margin: 0 auto;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-col {
    flex: 1 1 22%;
    min-width: 200px;
    margin-bottom: 20px;
}

.footer-col h5 {
    color: #ffffff;
    margin-bottom: 20px;
    font-weight: bold;
}

.footer-menu {
    list-style: none;
    padding: 0;
}

.footer-menu li {
    margin-bottom: 10px;
}

.footer-menu a {
    color: #cbd5d8;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-menu a:hover {
    color: #00D1A0;
}

.footer-sosmed {
    text-align: center;
    margin-top: 30px;
}

.footer-sosmed a {
    display: inline-block;
    width: 38px;
    height: 38px;
    line-height: 38px;
    margin: 0 5px;
    text-align: center;
    border-radius: 50%;
    background-color: #00000050;
    color: #ffffff;
    font-size: 16px;
    transition: background 0.3s, color 0.3s;
}

.footer-sosmed a:hover {
    background-color: #00D1A0;
    color: #ffffff;
}

hr {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 40px;
}

#copyright {
    text-align: center;
    color: #aaa;
    font-size: 14px;
    margin-top: 20px;
}

#copyright a {
    color: #00D1A0;
    text-decoration: none;
}

/* Centrer le formulaire */
#app form .row {
    justify-content: center;
    text-align: center;
    width: 100%;
}




</style>




<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');">
    <div class="hero-section text-center">
        <div class="container wow zoomIn">
  <span class="subhead">See when your favorite doctor is available ! </span>
<h1 class="display-4">Pick you day </h1>

            <a href="#app" class="btn btn-primary mt-4 d-block">Let's Consult</a>
        </div>
    </div>
</div>



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

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Editorial Team</a></li>
                    <li><a href="#">Protection</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Join as Doctors</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">One-Fitness</a></li>
                    <li><a href="#">One-Drugs</a></li>
                    <li><a href="#">One-Live</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Contact</h5>
                <p>351 Willow Street Franklin, MA 02038</p>
                <p>701-573-7582</p>
                <p>healthcare@temporary.net</p>
            </div>
        </div>

        <div class="footer-sosmed">
            <h5>Social Media</h5>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <hr>
        <div id="copyright">
            Copyright © 2020 <a href="#">MACode ID</a>. All right reserved
        </div>
    </div>
</footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>



@endsection
@endsection
