<?php
// Задайте классы в переменной $class
$class = 'mt-10 w-200';

// Разделяем значение класса на название и значение
$styles = explode(' ', $class);

// Формируем стиль CSS на основе классов
$style = '';
foreach ($styles as $class) {
    // Разделяем каждый класс на название свойства и значение
    $parts = explode('-', $class, 2);
    $property = $parts[0];
    $value = $parts[1];
 
    // Проверяем название свойства и формируем соответствующий стиль CSS
    switch ($property) {
        case 'mt':
            $style .= 'margin-top: ' . $value . 'px;';
            break;
        case 'mb':
            $style .= 'margin-bottom: ' . $value . 'px;';
            break;
        case 'pt':
            $style .= 'padding-top: ' . $value . 'px;';
            break;
        case 'pb':
            $style .= 'padding-bottom: ' . $value . 'px;';
            break;
        case 'w':
            $style .= 'width: ' . $value . 'px;';
            break;
        case 'h':
            $style .= 'height: ' . $value . 'px;';
            break;
        default:
            // Если название свойства не соответствует, игнорируем его
            break;
    }
}

?>
