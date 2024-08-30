<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <title><?php if (isset($title)) {
                echo $title;
            } else {
                echo "The Coup Publishing House | Best books Publisher in India ";
            } ?></title>
     <link rel="canonical" href="<?php if (isset($canonical)) {
                                    echo $canonical;
                                } else {
                                    echo "https:www.thecouppublishinghouse.in";
                                } ?>" />

    <!-- ------- Meta Tags ------------- -->
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=5.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <meta name="description" content="<?php if (isset($description)) {
                                            echo $description;
                                        } else {
                                            echo "The Coup Publishing House | Best books Publisher in India.";
                                        } ?>" />

    <meta name="keywords" content="<?php if (isset($keywords)) {
                                        echo $keywords;
                                    } else {
                                        echo "The Coup Publishing House, Best books Publisher in India";
                                    } ?>" />

    <meta name="allow-search" content="yes" />
    <meta property="og:locale" content="IT" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Coup Publishing House" />
    <meta property="og:description" content="The Coup Publishing House, Best books Publisher in India" />
    <meta property="og:url" content="https://www.thecouppublishinghouse.in" />
    <meta property="og:site_name" content="The Coup Publishing House" />
    <meta property="og:image" content="https://www.thecouppublishinghouse.in/assets/images/logo.png" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon" />


   <!-- Bootstrap css cdn -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Fontawesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
