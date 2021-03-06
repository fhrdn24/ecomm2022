<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Autocomplete Search</title>
    <style type="text/css">
        body{
            font-family: 'Roboto', sans-serif;
            margin-top: 30px;
            background-image: url('pics/back.jpg');
        }
        
        h2 {
            text-align: center;
        }

        .col-lg-6 input, li {
            margin: 0 auto;
            width: 300px;
        }
        .col-lg-6 label {
            margin: 0 auto;
            margin-top: 30px;
            font-size: 20px;
        }

        ul li:hover {
            cursor: pointer;
            background-color: whitesmoke;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="col-lg-12">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h2 style="margin-top: 100px;">Autocomplete Search Bar</h2><h2>jQuery, Ajax , PHP dan MYSQL</h2>
            <br>  
            <form action="search.php" method="POST">
                <center>
                    <label>Cari nama Negara</label>
                </center>
                <br><br>
                <input type="text" id="searchBox" name="searchBox" class="form-control" autocomplete="off" placeholder="Type name of a country" required="required">
                <div id="result">
                    
                </div>
                <center>
                    <button class="btn btn-primary">Cari</button>
                </center>               
            </form>   
            <div class="success"></div>  

        </div> 
        <div class="col-lg-3"></div>    
    </div>
    <script>
        $(document).ready(function(){
            $('#searchBox').keyup(function(){
                var query = $('#searchBox').val();

                if(query.length>0){
                    $.ajax({
                        url: "fetch.php",
                        method: "POST",
                        data: {
                           search : 1,
                           q: query 
                        },
                        success:function(data){
                            $('#result').html(data);
                        },
                        dataType: "text"
                    });
                }
            });

            $(document).on('click', 'li', function(){

                var country = $(this).text();
                $('#searchBox').val(country);
                $('#result').html("");

            });
        });

    </script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
</body>
</html>
