<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="i6tfxtIdDxffxiWKBEo3snmUCl6GIBGRq4ikcW16KfI" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
    <title><?php echo $pageTitle ?? 'ICU Tools'; ?></title>
    <link rel="icon" href="/icon.png" type="image/png">
    <link rel="stylesheet" href="/style/style.css" />
    <?php
    // Thêm style riêng cho từng trang
    if (isset($page)) {
        switch ($page) {
            case 'ibw':
                echo '<link rel="stylesheet" href="/style/ibw.css">';
                break;
            case 'ett':
                echo '<link rel="stylesheet" href="/style/ett.css">';
                break;
            case 'bmi':
                echo '<link rel="stylesheet" href="/style/bmi.css">';
                break;
            case 'zscore-calculator':
                echo '<script src="https://cdn.plot.ly/plotly-3.0.0.min.js"></script>';
                echo '<link rel="stylesheet" href="/style/zscore-calculator.css">';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_green.css"/>';
                echo '<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>';
                break;
            case 'lightCriteria':
                echo '<link rel="stylesheet" href="/style/lightCriteria.css">';
                break;
            case 'eer':
                echo '<link rel="stylesheet" href="/style/eer.css">';
                echo '<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>';
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_green.css"/>';                
                break;
        }
    }
    ?>
    <script src="/script.js"></script>
</head>
