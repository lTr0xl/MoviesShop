<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $details['Title']; ?> - Movie Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Required for absolute positioning of button */
        }
        .movie-poster {
            width: 100%;
            max-width: 300px;
            float: left;
            margin-right: 20px;
        }
        .movie-detailss {
            overflow: hidden;
        }
        .movie-detailss h2 {
            margin-top: 0;
        }
        .movie-detailss p {
            margin: 5px 0;
        }
        .movie-detailss ul {
            list-style-type: none;
            padding: 0;
        }
        .movie-detailss ul li {
            margin-bottom: 5px;
        }
        .clear {
            clear: both;
        }
        .btn-custom {
            background-color: #28a745; /* Green color */
            border-color: #28a745;
            font-size: 0.875rem; /* Slightly smaller font size */
        }
        .btn-custom:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #1e7e34;
        }
        .custom-btn-container {
            position: absolute; /* Position button relative to the container */
            top: 20px; /* Adjust the top position */
            right: 20px; /* Adjust the right position */
        }
    </style>
</head>
<body>
<?php 
    require("../View/navBar.php");
?>
<div class="container" style="margin-top: 40px; display: flex; position: relative;">
    <div style="width: 900px; height: 400px; margin-right: 20px;">
        <img style="height: 400px;" class="movie-poster" src="<?php echo $details['MovieImageUrl']; ?>" alt="<?php echo $details['Title']; ?>">
    </div>
    <div style="width: 1720px; height: 400px; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
            <h2><?php echo $details['Title']; ?></h2>
            <p><strong>Description: </strong> <?php echo $details['Description']; ?></p>
            <p><strong>Duration:</strong> <?php echo $details['Duration']; ?> minutes</p>
            <p><strong>Creative Director:</strong> <?php echo $details['DirectorName']; ?></p>
            <p><strong>Genres: </strong>
            <?php foreach($genres as $genre) : ?>
                <?php echo $genre['Name'] ?>
            <?php endforeach; ?>
            </p>
            <p><strong>Actors: </strong>
                <?php foreach($actors as $actor) : ?>
                    <?php echo $actor['FullName'] ?>
                <?php endforeach; ?>
            </p>
            <p><strong>Price:</strong> <?php echo $details['Price'] ?> $</p>
        </div> 
        
    </div> 
</div>      
<form action="." method="post" style="display: flex; gap: 10px; margin-left: 67%; margin-top: 20px;">
            <input type="hidden" name="action" value="delete" />
            <input type="hidden" name="movie_id" value="<?php echo $details['MovieID']; ?>" />
            <input type="hidden" value="<?php echo $details["MovieImageUrl"] ?>" name="ImageUrl" />
            <input class="btn btn-sm btn-outline-secondary" type="submit" value="Delete" />
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <a href="?action=show_edit_form&id=<?php echo $details['MovieID'] ?>" class="text-decoration-none text-dark">Edit</a>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="../Movies" class="text-decoration-none">Go Back</a></button>
</form>


<!-- Bootstrap JS (Popper.js is included with Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
