<?php //
if(isset($_POST['FID']) && isset($_POST['IDV']) && isset($_POST['table'])){
	$table = $_POST['table'];	 
	$FV = $_POST['FID'];
	$IDV = $_POST['IDV'];
	if(file_exists('../../includes/Classes/DB/DB.class.php')){
            require_once '../../includes/Classes/DB/DB.class.php';
            require_once '../../includes/Classes/Config/Config.class.php';
            require_once '../../includes/Classes/Security/RegX.class.php';
	}else{
            die('<div class="alert alert-warning" role="alert">Can\'t include some files on file '.__FIL__.', line : '.__LINE__.'</div>');
	}
	
	$Security = new RegX;
	if(!$Security->check_numbers($IDV)){
		$Error_IDV = 1;
	}
	if(!$Security->check_noSpecialCaracters($FV)){
		$Error_FV = 1;
	}
	if(!$Security->check_noSpecialCaracters($table)){
		$Error_table = 1;
	}		
	if($Error_IDV == 1 || $Error_IDF == 1 || $Error_table == 1){
		die('ED');	//Error data
	}else{
            $session = new Session();
            $DB = new Database();
            ///M = down   else = top
            if($FV == 'M')
            {
                $SQL = "SELECT max(`order`) from $table";
                //echo $SQL2;
                $RES = $DB->Query($SQL);
                $ROW = $DB->FArray($RES);
                if($ROW[0] == '' || $ROW[0] == 0)
                {
                    $SQL = "UPDATE $table set `order` = 1 limit 1";
                    //echo $SQL;
                    if($DB->Query($SQL))
                    {
                        echo "one field has 1\n";
                    }else{
                        echo "no field has 1\n";
                    }
                }else{
                    echo 'nice';
                }


                        
			$SQL = "SELECT `order` from $table";
                        //echo $SQL;
			$RES = $DB->Query($SQL);
                        while($ROW = $DB->FArray($RES))
                        {
                            if($ROW[0] == '' || $ROW[0] == 0)
                            {


                            }else{
                                echo 'good';
                            }
                        }
			$id = mysql_field_name($res, 0);
			$SQL = "UPDATE `$table` SET `order` = `order`+1 where $id = $IDV";			
			$SQL2 = "UPDATE `$table` SET `order` = `order`-1 where `order` = $ORDER+1";
			$DB->Query($SQL2);
			$DB->Query($SQL);
                        die();
			die('OK');			
		}else{
			$SQL = "SELECT order from $table";
			$res = $DB->Query($SQL);			
			$id = mysql_field_name($res, 0);
			$SQL = "UPDATE `$table` SET `order` = `order`-1 where $id = $IDV";			
			$SQL2 = "UPDATE `$table` SET `order` = `order`+1 where `order` = $ORDER-1";
			$DB->Query($SQL2);
			$DB->Query($SQL);
                        die($SQL2);
			die('OK');			
		}			
	}
}
?>