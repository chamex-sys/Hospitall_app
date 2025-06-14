@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="../assets/css/maicons.css">
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
<link rel="stylesheet" href="../assets/vendor/animate/animate.css">
<link rel="stylesheet" href="../assets/css/theme.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

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
            </div>
        </div>
    </div>

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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="\html\about.html">About Us</a>
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
                                <a class="btn btn-login" href="{{route('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-register" href="{{route('register')}}">Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');">
    <div class="hero-section">
        <div class="container">
            <div class="hero-text">
                <div class="subhead-text">SEE WHEN YOUR FAVORITE DOCTOR IS AVAILABLE!</div>
                <h1 class="display-4">Pick you day</h1>
                <a href="#calendar-section" class="btn btn-consult">Let's Consult</a>
            </div>
        </div>
    </div>
</div>

<div id="calendar-section" class="calendar-container">
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

        <div id="copyright">
            Copyright © 2020 <a href="#">MACode ID</a>. All right reserved
        </div>
    </div>
</footer>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    line-height: 1.5;
}

/* Topbar */
.topbar {
    background-color: #fff;
    padding: 5px 0;
    font-size: 14px;
    border-bottom: 1px solid #f0f0f0;
}

.topbar .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.site-info {
    display: flex;
    align-items: center;
}

.site-info a {
    color: #555;
    text-decoration: none;
    margin-right: 15px;
    display: flex;
    align-items: center;
}

.site-info a .mai-call,
.site-info a .mai-mail {
    color: #00D1A0;
    margin-right: 5px;
}

.site-info .divider {
    color: #ddd;
    margin: 0 10px;
}

.social-mini-button {
    display: flex;
}

.social-mini-button a {
    color: #555;
    margin-left: 15px;
    font-size: 16px;
}

/* Navbar */
.navbar {
    padding: 10px 0;
    background-color: #fff;
}

.navbar .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.navbar-brand .text-primary {
    color: #00D1A0 !important;
}

.input-group.input-navbar {
    width: 280px;
    margin: 0 20px;
}

.input-navbar .form-control {
    border-radius: 4px;
    padding: 8px 12px;
}

.input-navbar .input-group-text {
    background-color: transparent;
    border-right: none;
}

.navbar-nav {
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
}

.nav-item {
    list-style: none;
    margin: 0 10px;
}

.nav-link {
    color: #555;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 0;
}

.nav-link:hover {
    color: #00D1A0;
}

.btn-login, 
.btn-register {
    background-color: #00D1A0;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 4px;
    font-weight: 500;
    text-decoration: none;
    display: inline-block;
    margin-left: 10px;
    transition: background-color 0.3s;
}

.btn-login:hover, 
.btn-register:hover {
    background-color: #00b38f;
    color: white;
}

/* Hero Section */
.page-hero {
    height: 80vh;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 0;
    padding: 0;
}

.hero-section {
    width: 100%;
}

.hero-text {
    max-width: 800px;
    margin: 0 auto;
}

.subhead-text {
    font-size: 18px;
    color: white;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
}

.hero-section h1 {
    font-size: 60px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.btn-consult {
    background-color: #00D1A0;
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 4px;
    font-weight: 500;
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
}

.btn-consult:hover {
    background-color: #00b38f;
    color: white;
}

/* Calendar */
.calendar-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    font-family: 'Roboto', sans-serif;
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

/* Footer */
.page-footer {
    background-color: #1e2d2f;
    color: #d3d3d3;
    padding: 40px 0 20px;
    font-size: 15px;
}

.page-footer .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.page-footer .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 -15px;
}

.footer-col {
    flex: 1 1 22%;
    min-width: 200px;
    padding: 0 15px;
    margin-bottom: 30px;
}

.footer-col h5 {
    color: #ffffff;
    margin-bottom: 20px;
    font-weight: 500;
    font-size: 18px;
}

.footer-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-menu li {
    margin-bottom: 10px;
}

.footer-menu a {
    color: #cbd5d8;
    text-decoration: none;
    transition: color 0.3s;
    font-size: 15px;
}

.footer-menu a:hover {
    color: #00D1A0;
}

.footer-col p {
    color: #cbd5d8;
    margin-bottom: 8px;
}

.footer-sosmed {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

.footer-sosmed h5 {
    color: #ffffff;
    margin-bottom: 15px;
    font-weight: 500;
}

.footer-sosmed a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin: 0 8px;
    text-align: center;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.3);
    color: #ffffff;
    font-size: 18px;
    transition: all 0.3s;
}

.footer-sosmed a:hover {
    background-color: #00D1A0;
    color: #ffffff;
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

/* Responsive */
@media (max-width: 768px) {
    .navbar-brand {
        font-size: 20px;
    }
    
    .input-group.input-navbar {
        width: 200px;
    }
    
    .hero-section h1 {
        font-size: 40px;
    }
    
    .subhead-text {
        font-size: 16px;
    }
    
    .btn-consult {
        padding: 10px 20px;
    }
    
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
    const appointments = @json($appointments);
    
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    
    const calendarDays = document.getElementById('calendar-days');
    const currentMonthYearElement = document.getElementById('currentMonthYear');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const appointmentDetails = document.getElementById('appointment-details');
    const selectedDateElement = document.getElementById('selected-date');
    const appointmentsList = document.getElementById('appointments-list');
    
    renderCalendar(currentMonth, currentYear);
    
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
    
    function renderCalendar(month, year) {
        calendarDays.innerHTML = '';
        
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        currentMonthYearElement.textContent = `${monthNames[month]} ${year}`;
        
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        const prevMonthDays = new Date(year, month, 0).getDate();
        for (let i = firstDay - 1; i >= 0; i--) {
            const dayElement = createDayElement(prevMonthDays - i, true);
            calendarDays.appendChild(dayElement);
        }
        
        for (let i = 1; i <= daysInMonth; i++) {
            const date = new Date(year, month, i);
            const formattedDate = formatDate(date);
            
            const dayAppointments = appointments.filter(app => app.date === formattedDate);
            const hasAppointments = dayAppointments.length > 0;
            
            const isToday = date.toDateString() === today.toDateString();
            
            const dayElement = createDayElement(i, false, isToday, hasAppointments);
            dayElement.dataset.date = formattedDate;
            dayElement.dataset.hasAppointments = hasAppointments;
            
            dayElement.addEventListener('click', function() {
                if (!this.classList.contains('other-month')) {
                    document.querySelectorAll('.day').forEach(day => {
                        day.classList.remove('selected');
                    });
                    
                    this.classList.add('selected');
                    showAppointmentDetails(formattedDate, dayAppointments, hasAppointments);
                }
            });
            
            calendarDays.appendChild(dayElement);
        }
        
        const totalCells = 42;
        const remainingCells = totalCells - (firstDay + daysInMonth);
        for (let i = 1; i <= remainingCells; i++) {
            const dayElement = createDayElement(i, true);
            calendarDays.appendChild(dayElement);
        }
    }
    
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
    
    function showAppointmentDetails(date, dayAppointments, hasAppointments) {
        selectedDateElement.textContent = date;
        appointmentsList.innerHTML = '';
        
        if (hasAppointments) {
            dayAppointments.forEach(appointment => {
                const appointmentItem = document.createElement('div');
                appointmentItem.classList.add('appointment-item');
                
                const patientName = document.createElement('div');
                patientName.classList.add('appointment-patient');
                patientName.textContent = `Patient: ${appointment.name}`;
                
                const message = document.createElement('div');
                message.classList.add('appointment-message');
                message.textContent = `Message: ${appointment.message}`;
                
                const status = document.createElement('div');
                status.classList.add('appointment-status');
                
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
            const noAppointments = document.createElement('p');
            noAppointments.textContent = 'No appointments for this day.';
            noAppointments.style.textAlign = 'center';
            noAppointments.style.color = '#666';
            appointmentsList.appendChild(noAppointments);
        }
        
        appointmentDetails.style.display = 'block';
    }
    
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }
});
</script>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
@endsection
