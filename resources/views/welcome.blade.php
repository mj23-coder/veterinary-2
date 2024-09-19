<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Veterinary</title>
    </head>
    <body>
        <Section>
         <img class="background" src="{{ asset('images/about.jpg') }}" alt="">
            <div class=nav>
             <img class="nav-pic" src="{{ asset('images/logo.png') }}" alt="">
                <ul class="nav-list">
                 <li><a href="#about">About Us</a></li>
                 <li><a href="#services">Services</a></li>
                 <li><a href="#location">Location/Contact</a></li>
                 <li><a href="#BOOK NOW!" class="bookB">Book Now</a></li>
                </ul>
            </div>
            <div class="about">
            <h2>About Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </section>
    </body>
</html>
