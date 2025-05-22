<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:#FFFFFF;
      height: 100%;
    }
	
    .sidenava {
      padding-top: 20px;
      background-color:#CCCCCC;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color:#FFFFFF;

      color:#FFFFFF;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 1000px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .row {
    margin-right: 0;
    margin-left: 0;
}
	.container {
    padding-right: 0px;
    padding-left: 0;
    margin-right: auto;
    margin-left: auto;
}
    .navbar-collapse {
    padding-right: 15px;
    padding-left: 5px;
}


/* NAVBAR */

/* Navbar Styling */
.navbar-inverse {
    background: linear-gradient(90deg, #2c3e50, #3498db);
    border: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: all 0.3s ease;
}

/* Navbar Logo */
.gambar-logo {
    max-height: 50px;
    margin: 10px auto;
    display: block;
    transition: transform 0.3s ease;
}

.gambar-logo:hover {
    transform: scale(1.1);
}

/* Navbar Links */
.navbar-nav > li > a {
    color: #ecf0f1 !important;
    font-size: 16px;
    padding: 15px 20px;
    text-transform: uppercase;
    position: relative;
    transition: all 0.3s ease;
}

.navbar-nav > li > a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 10px;
    left: 20px;
    right: 20px;
    background-color: #f1c40f;
    transition: width 0.3s ease-in-out;
}

.navbar-nav > li > a:hover,
.navbar-nav > li > a:focus {
    background-color: rgba(255, 255, 255, 0.1) !important;
    color: #f1c40f !important;
}

.navbar-nav > li > a:hover::after,
.navbar-nav > li > a:focus::after {
    width: calc(100% - 40px);
}

/* Active Link */
.navbar-nav > li.active > a {
    background-color: #2980b9 !important;
    color: #fff !important;
}

/* Dropdown Menu */
.dropdown-menu {
    background: #34495e;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.dropdown.open .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu > li > a {
    color: #ecf0f1 !important;
    padding: 10px 20px;
    transition: all 0.3s ease;
}

.dropdown-menu > li > a:hover {
    background-color: #2980b9 !important;
    color: #f1c40f !important;
}

/* Navbar Toggle Button */
.navbar-toggle {
    border: none;
    background: transparent !important;
}

.navbar-toggle .icon-bar {
    background-color: #ecf0f1;
    transition: all 0.3s ease;
}

.navbar-toggle:hover .icon-bar {
    background-color: #f1c40f;
}

/* Right-aligned Navbar Items */
.navbar-nav.navbar-right > li > a {
    color: #ecf0f1 !important;
}

.navbar-nav.navbar-right > li > a:hover {
    color: #f1c40f !important;
}

/* Responsive Adjustments */
@media (max-width: 767px) {
    .navbar-nav {
        background: #2c3e50;
        margin: 0;
    }

    .navbar-nav > li > a {
        padding: 10px 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .navbar-nav > li > a::after {
        bottom: 5px;
        left: 15px;
        right: 15px;
    }

    .navbar-nav > li > a:hover::after,
    .navbar-nav > li > a:focus::after {
        width: calc(100% - 30px);
    }

    .dropdown-menu {
        background: #34495e;
        box-shadow: none;
    }

    .navbar-collapse {
        max-height: 100vh;
        overflow-y: auto;
    }
}

  </style>
