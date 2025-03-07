<?php
// Lấy đường dẫn trang từ URL
$page = $_GET['page'] ?? 'cpap';

// Đặt tiêu đề trang dựa trên lựa chọn
switch ($page) {
    case 'cpap':
        $pageTitle = "CPAP Calculator";
        break;
    case 'ett':
        $pageTitle = "ETT Size";
        break;
    case 'ibw':
        $pageTitle = "Ideal Body Weight";
        break;
    case 'zscore-calculator':
        $pageTitle = "WHO Z-Score";
        break;
    case 'bmi':
        $pageTitle = "BMI & BSA Calculator";
        break;
    case 'lightCriteria':
        $pageTitle = "Light's Criteria";
        break;
    case 'eer':
        $pageTitle = "Estimated energy requirement";
        break;
    default:
        $pageTitle = "Page Not Found";
        $page = '404'; // Trang lỗi
        break;
}

if (($page !== 'zscore-calculator') && ($page !== 'eer')) {
    include 'header.php'; // Chỉ include header khi không phải API
}

// Kiểm tra và include nội dung tương ứng
try {
    switch ($page) {
        case 'cpap':
            if (file_exists('cpap.php')) {
                include 'cpap.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'ett':
            if (file_exists('ett.php')) {
                include 'ett.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'ibw':
            if (file_exists('ibw.php')) {
                include 'ibw.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'zscore-calculator':
            if (file_exists('zscore-calculator.php')) {
                include 'zscore-calculator.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'bmi':
            if (file_exists('bmi.php')) {
                include 'bmi.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'lightCriteria':
            if (file_exists('lightCriteria.php')) {
                include 'lightCriteria.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        case 'eer':
            if (file_exists('eer.php')) {
                include 'eer.php';
            } else {
                throw new Exception("File not found");
            }
            break;
        default:
            include '404.php'; // Trang lỗi
            break;
    }
} catch (Exception $e) {
    include '404.php'; // Hiển thị trang lỗi nếu không tìm thấy file
}
?>
