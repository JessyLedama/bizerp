<link rel="stylesheet" href="{{ asset('css/side-nav.css') }}">

<!-- This side nav should show relevant links 
    depending on which module is open -->


<!-- Get the name of the current page -->
<?php 
    $url = url()->current();
    $urlData = explode("/", $url);
    if(count($urlData) < 5)
    {
        $urlName = $urlData[3];
    }
    elseif(count($urlData) > 5){
        $urlName = $urlData[count($urlData) - 2];
    }
    
    // dd($urlData[4]);
?>

<nav>
    <div class="sidenav">
        
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>

        <a href="#contact">{{ ucfirst($urlName) }}</a>
    </div> 
</nav>   


