# NEW ERA UNIVERSITY RESERVATION FOR MULTIMEDIA ROOMS(CAPSTONE PROJECT)

---

NEURS is a reservation web application for students and faculties of New Era University that use the services of multimedia rooms.

---

## Demo

[NEURS](https://streamable.com/jzufgd)

<!-- Feature Images -->

### Users Features

| Home                                                                               | Account Page                                                                             |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| ![Home](https://github.com/noven21/neurs/blob/master/gitimgs/home-header.png)      | ![Accout-page](https://github.com/noven21/neurs/blob/master/gitimgs/acount-page.png)     |
| Calendar Page                                                                      | My Schedule Page                                                                         |
| ![Caledar](https://github.com/noven21/neurs/blob/master/gitimgs/calendar-page.png) | ![My-schedule](https://github.com/noven21/neurs/blob/master/gitimgs/myschedule-page.png) |
| Reservation Page                                                                   |

|![Reservation](https://github.com/noven21/neurs/blob/master/gitimgs/reservation-page.png)

---

### Admin Features

| Admin Reservation Approval Page                                                                            | Admin Items Management Page                                                                     |
| ---------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| ![Admin-approval](https://github.com/noven21/neurs/blob/master/gitimgs/admin-reservation-pending-page.png) | ![Admin-item](https://github.com/noven21/neurs/blob/master/gitimgs/admin-items-page.png)        |
| Admin Rooms Management Page                                                                                | Admin Account Management Page                                                                   |
| ![Admin-rooms](https://github.com/noven21/neurs/blob/master/gitimgs/admin-rooms-page.png)                  | ![Admin-accounts](https://github.com/noven21/neurs/blob/master/gitimgs/admin-accounts-page.png) |

## Web app features

#### User features

- [x] User can register and login
- [x] User can reserve rooms and items
- [x] User can edit their profile informations
- [x] User can view the existing reservation details

#### Admin features

- [x] Admin can approve User Reservations
- [x] Admin can edit quantity and informations of Reservation Rooms and Items
- [x] Admin can view the existing reservation details
- [x] Admin can Manage the users account

## Potential Improvements

- Add OTP auth feature to improve security and avoid spam accounts
- Add a Classroom Management feature when Advisor can manage the students attendance
- Add a notification feature that user can notify if the rooms or items of reservation are ready
- Add a history reservation feature that user can view the reservation history or logs.

## Setup instructions

1. Clone the repository.
   ![Clone-img](https://github.com/noven21/neurs/blob/master/gitimgs/git-clone.png)
   2.'cd' into the directory and open with code editor
2. Install and setup XAMPP for localhost and open admin
   ![phpMyadmin](https://github.com/noven21/neurs/blob/master/gitimgs/php-admin.png)
3. View the neudb.sql file in Code
4. create database in phpMyadmin in xampp name it 'neudb'
5. create tables that exact name that you found in neudb.sql file
   ![table](https://github.com/noven21/neurs/blob/master/gitimgs/create-table.png)
6. Insert dummy information in tables of database
   ![dummy-data](https://github.com/noven21/neurs/blob/master/gitimgs/dummy-data.png)
7. Open this link http://localhost/NEURS/index.php/main in web browser this link served as index page.

## Builth with

- Codeigniter - is an open-source software rapid development web framework, for use in building dynamic web sites with PHP.
- PHP- is a general-purpose scripting language geared toward web development.
- jQuery - is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation.
- Bootstrap - is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.
- FullCalendar API - is a lightweight yet powerful and developer-friendly JavaScript library to create flexible, draggable event calendars on the modern web app.
- CSS - is a simple mechanism for adding style (e.g., fonts, colors, spacing) to Web documents.
- SQL - is a domain-specific language used in programming and designed for managing data held in a relational database management system.
- phpMyAdmin -is a free and open source administration tool for MySQL and MariaDB.
- XAMPP - is a free and open-source cross-platform web server solution stack package developed by Apache Friends.
