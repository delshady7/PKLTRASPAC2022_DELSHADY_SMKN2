<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Urut Angka</title>
</head>
<body>

    <h1>Sistem pengurut angka super sederhana</h1>
    <div>
        <button id="tambah">Tambah Kotak</button>
        <button id="kurang" >Kurangi Kotak</button>
    </div>
    
    <form action="sistemurutangka.php" method="post">
            <table>               
                <tr>
                    <td id="kolom">
                        <input type="number" id="kolominput" name="inputangka[]">
                    </td>
                </tr>
                <tr>
                    <td>
                    <select name="urutan" id="pilihan">
                        <option value="kecil-besar">Kecil-Besar</option>
                        <option value="besar-kecil">Besar-Kecil</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="urutkan">
                    </td>
                </tr>
            </table>
    </form>

<?php
        if (isset ($_POST ['urutkan'])){
            $input = $_POST['inputangka'];
            $temp=0;
            $urut = $_POST['urutan'];

            function bubbleSort($input )
                {
                    do
                    {   
                         $tukar = false;                   
                        for( $i = 0, $c = count( $input ) - 1; $i < $c; $i++ )
                        {
                            
                            if( $input[$i] > $input[$i + 1] )
                            {
                                list( $input[$i + 1], $input[$i] ) =
                                        array( $input[$i], $input[$i + 1] );
                                    $tukar = true;                              
                            }
                        }
                        
                    }
                    while( $tukar );
                return $input;
                }

                function bubbleRsort($input )
                {
                    do
                    {
                        $tukar = false;
                        for( $i = 0, $c = count( $input ) - 1; $i < $c; $i++ )
                        {
                            if( $input[$i] < $input[$i + 1] )
                            {
                                list( $input[$i], $input[$i + 1] ) =
                                        array( $input[$i + 1], $input[$i] );
                                $tukar = true;
                            }
                        }
                        
                    }
                    while( $tukar );
                return $input;
                }
                // $test_array = array(3, 0, 2, 5, -1, 4, 1);
                // echo "Original Array :\n";
                // echo implode(', ',$test_array );
                // echo "\nSorted Array\n:";
                // echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
            if ($urut === "kecil-besar") {
                $input = bubbleSort($input);
            }else{
                $input = bubbleRsort($input);
            }foreach ($input as $hasil1) {
                    echo "$hasil1 </br>";
            }
        }      
?>

<script>
        var tambahkotak = document.getElementById("tambah");
        tambahkotak.addEventListener("click", tambah);

         function tambah(){           
            var kolominput = document.createElement('input');
            kolominput.setAttribute("type", "number");
            kolominput.setAttribute("name", "inputangka[]");

            kolom.appendChild(kolominput);
        }

        var kurangikotak = document.getElementById("kurang");
        kurangikotak.addEventListener("click", kurang)
       
        function kurang(){
            var kolom= document.getElementById('kolom');
            kolom.removeChild(kolom.lastChild);
        }        
</script>

</body>
</html>


