<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /*
               Margin and rounding are personal preferences,
               overflow-x-auto is recommended.
             */
            pre {
                border-radius: 0.25rem;
                margin-top: 1rem;
                margin-bottom: 1rem;
                overflow-x: auto;
            }

            /*
               Add some vertical padding and expand the width
               to fill its container. The horizontal padding
               comes at the line level so that background
               colors extend edge to edge.
             */
            pre code.torchlight {
                display: block;
                min-width: -webkit-max-content;
                min-width: -moz-max-content;
                min-width: max-content;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            /*
               Horizontal line padding to match the vertical
               padding from the code block above.
             */
            pre code.torchlight .line {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            /*
               Push the code away from the line numbers and
               summary caret indicators.
             */
            pre code.torchlight .line-number,
            pre code.torchlight .summary-caret {
                margin-right: 1rem;
            }
        </style>
        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <pre><x-torchlight-code language='php'  :contents="resource_path('samples/ServiceContainer.php')" >
        </x-torchlight-code></pre>
    </body>
</html>
