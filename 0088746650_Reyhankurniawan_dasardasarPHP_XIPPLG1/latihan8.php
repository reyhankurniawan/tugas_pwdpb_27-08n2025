If-else: 
<?php 
$nilai = 80; 
if ($nilai >= 75) { 
echo "Lulus"; 
} else { 
echo "Tidak Lulus"; 
} 
?>
Switch: 
<?php 
$hari = 3; 
switch ($hari) { 
case 1: 
echo "Senin"; 
break; 
case 2: 
echo "Selasa"; 
break; 
case 3: 
echo "Rabu"; 
break; 
default: 
echo "Hari tidak 
diketahui";
}
?>
 While: 
<?php 
$i = 1; 
while ($i <= 5) { 
echo "Angka: $i <br>"; 
$i++; 
} 
?> 
 Foreach (untuk array): 
<?php 
$buah = array("apel", "jeruk", 
"mangga"); 
foreach ($buah as $item) { 
echo $item . "<br>"; 
} 
?>