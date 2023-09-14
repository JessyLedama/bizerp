<link rel="stylesheet" href="{{ asset('css/side-nav.css') }}">

<!-- This side nav should show relevant links 
    depending on which module is open -->

<nav>
    <div class="sidenav">
        <a href="#contact">{{ ucfirst($urlData[0]) }}</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>        
    </div> 
</nav>   


