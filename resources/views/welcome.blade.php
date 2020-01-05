@include('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    </head>
    <body>
    <div style="text-align:center" >
        <table align="center" >
            <tr>
                <th >Game</th>
                <th >Name</th>
            </tr>
    <?php
            foreach ($games as $game)
            {
    ?>          <tr>
                <!-- Using the steamspy api the appid can be used to search the Steam Page and the game image from the Steam -->
                <td ><img src= <?php echo "https://steamcdn-a.akamaihd.net/steam/apps/".$game->appid."/header.jpg"; ?> width:auto height="100"></td>
                <td ><a href=<?php echo "https://store.steampowered.com/app/".$game->appid."/";?> ><?php echo $game->name; ?></a>
    <?php 
                // If the game does have a price
                if( $game->price > 0)
                {
                    
                    $price_string = (string)$game->price;
                    if (strlen($price_string) == 3) //If the game price is like for example 9,99$
                    {
                        $first_numbers = $price_string[0]; //Only use the first digit
                        $rest_price = substr($price_string, 1); //And catches the other two digits
                    }
                    else if (strlen($price_string) > 3) //If the game price is like for example 19,99$
                    {
                        $first_numbers = substr($price_string, 0, 2); //First two digits
                        $rest_price = substr($price_string, 2); //The last two digits
                    } 
                    //Attach the first or first two numbers with a dot ('.') and the rest of the digits
                    $value = $first_numbers.".".$rest_price; 

                    echo "Price - ".$value."$";
                } 
    ?>          </td>
                </tr>
            <!-- </li> -->
    <?php                
            }                
    ?>
        <!-- </ol> -->
        </table>
    </body>
</html>
