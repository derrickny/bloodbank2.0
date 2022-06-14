<!DOCTYPE html>
    <html>
        <head>
            <title>AJAX Callback</title>
             <script type="text/javascript" src="jquery/jquery.js"></script>
        <script type="text/javascript" src="jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript">
         $(document).ready(function(){
            $('#button').click(function()
                               {
                                $.ajax({
                                    url: 'page.html',
                                    success:function(data){
                                        
                                    }
                                    });
                               });
            
         });
        </script>
        </head>
        <body>
         <h1>Ajax Tutorial</h1>
            
          
            <input type="button" id="button" value="Load" />
            <div id="content"></div>
        </body>
    </html>