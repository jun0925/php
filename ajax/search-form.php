<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Live MySQL Database Search</title>
    <style>
        body{
            font-family: Arail, sans-serif;
        }
        .search-box{
            width: 300px;
            position: relative;
            display: inline-block;
            font-size: 14px;
        }
        .search-box input[type="text"]{
            height: 32px;
            padding: 5px 10px;
            border: 1px solid #CCCCCC;
            font-size: 14px;
        }
        .result{
            position: absolute;
            z-index: 999;
            top: 100%;
            left: 0
        }
        .search-box input[type="text"], .result{
            width:100%;
            box-sizing: border-box;
        }
        .result p{
            margin: 0;
            padding: 7px 10px;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result p:hover{
            background-color: #f2f2f2;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.search-box input[type="text"]').on("keyup input", function(){
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("backend-search.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browse
                        console.log(data);
                        resultDropdown.html(data);
                    })
                }else{
                    resultDropdown.empty();
                }
            });
    
            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
</head>
<body>
    <div class="search-box">
        <input type="text" name="" id="" autocomplte="off" placeholder="Search country..." />
        <div class="result"></div>
    </div>
</body>
</html>