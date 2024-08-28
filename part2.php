<?php
$x = "Hello world999";
$y = "Em nao hu la anh danh day";
$z = "       BE   OI     TU        TU";

//ex1
echo "1.Số ký tự trong một chuỗi sử dụng hàm strlen():" . strlen($x). '<br>';
//ex2
echo "2.Số từ trong một chuỗi sử dụng hàm str_word_count():".str_word_count("$x"). '<br>';
//ex3
echo "3.Đảo ngược một chuỗi sử dụng hàm:".strrev($x). '<br>';
//ex4
echo "4.Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos():" .strpos($x, 'Hello'). '<br>';
//ex5
echo "5.Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace():"
.str_replace('world','em',$x) . '<br>';
//ex6
echo "6.Kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp():"
.strcmp($x, $y). '<br>';
//ex7 
echo "7.Chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper():"
.strtoupper($y). '<br>';
//ex8
echo "8.Chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower():"
.strtolower($z). '<br>';
//ex9
echo "9.Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords():"
.ucwords("em hu lam be oi"). '<br>';
//ex10
echo "10.Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim():"
.trim($z). '<br>';
//ex11
echo "11.Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim():"
.ltrim($z). '<br>';
//ex12
echo "12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim():"
.rtrim($x, "9"). '<br>';
//ex13
echo "13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode():";
$string = "Black,Myth,Wukong";
$t = explode(",",$string) ;
print_r($t);
echo '<br>';
//ex14
echo "14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode():";
$array = array(
    'PHP',
    'CSS',
    'JS'
    );
$str = implode(",", $array);
 
echo $str ; 
echo '<br>';
//ex15
echo "15.Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad(): " 
. str_pad($x, 20, "#", STR_PAD_BOTH) . '<br>';
//ex16
echo "16.Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr(): " 
. (strrchr($x, 'd') ? 'Có' : 'Không') . '<br>';
//ex17
echo "17.Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr(): " 
. (strstr($x, 'world') ? 'Có' : 'Không') . '<br>';
//ex18
echo "18.Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace(): " 
. preg_replace("/[^a-zA-Z0-9]/", "*", $t) . '<br>';
//ex19
echo "19.Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int(): " 
. (is_int($x) ? 'Là số nguyên' : 'Không phải số nguyên') . '<br>';
//ex20
echo "20.Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var(): " 
. (filter_var($t, FILTER_VALIDATE_EMAIL) ? 'Email hợp lệ' : 'Email không hợp lệ') . '<br>';
