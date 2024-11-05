<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel with Laracast</title>

    </head>
    <body >
        <nav>
           <x-nav-link href='/'>Home</x-nav-link>
           <x-nav-link href='/about' style="color:brown">About</x-nav-link>
           <x-nav-link href='/contact'>Contact</x-nav-link>
        </nav>

       <?php echo $slot ?>
    </body>
</html>
