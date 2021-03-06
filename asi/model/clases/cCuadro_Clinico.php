<?php
class CuadroClinico
{
	
    //Constructor

   function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }

	function crear_alergia($reg)
    {
    $sql="INSERT INTO alergia (nomAlerg)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_padecimiento($reg)
    {
    $sql="INSERT INTO padecimiento (nomPad)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_parentesco($reg)
    {
    $sql="INSERT INTO parentesco (nomPar)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_estado($reg)
    {
    $sql="INSERT INTO estado (nomEst)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

	function mod_alergia($reg)
    {
    $sql="UPDATE alergia SET nomAlerg=? where idAlerg=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_padecimiento($reg)
    {
    $sql="UPDATE padecimiento SET nomPad=? where idPad=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_parentesco($reg)
    {
    $sql="UPDATE parentesco SET nomPar=? where idPar=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_estado($reg)
    {
    $sql="UPDATE estado SET nomEst=? where idEst=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function seleccionar_alergia()
	{
			$sql = "SELECT * FROM alergia ORDER BY idAlerg desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idAlerg'];
					$info[$id]['idAlerg']	= $rs->fields['idAlerg'];
					$info[$id]['nomAlerg'] 	= $rs->fields['nomAlerg'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_alergia1($id)
	{
			$sql = "SELECT * FROM alergia where idAlerg=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idAlerg'];
					$info[$id]['idAlerg']	= $rs->fields['idAlerg'];
					$info[$id]['nomAlerg'] 	= $rs->fields['nomAlerg'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_padecimiento()
	{
			$sql = "SELECT * FROM padecimiento ORDER BY idPad desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPad'];
					$info[$id]['idPad']		= $rs->fields['idPad'];
					$info[$id]['nomPad'] 	= $rs->fields['nomPad'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_padecimiento1($id)
	{
			$sql = "SELECT * FROM padecimiento where idPad=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPad'];
					$info[$id]['idPad']		= $rs->fields['idPad'];
					$info[$id]['nomPad'] 	= $rs->fields['nomPad'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_parentesco()
	{
			$sql = "SELECT * FROM parentesco ORDER BY idPar desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPar'];
					$info[$id]['idPar']		= $rs->fields['idPar'];
					$info[$id]['nomPar'] 	= $rs->fields['nomPar'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_parentesco1($id)
	{
			$sql = "SELECT * FROM parentesco where idPar=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPar'];
					$info[$id]['idPar']		= $rs->fields['idPar'];
					$info[$id]['nomPar'] 	= $rs->fields['nomPar'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

		function seleccionar_estado()
	{
			$sql = "SELECT * FROM estado ORDER BY idEst desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idEst'];
					$info[$id]['idEst']		= $rs->fields['idEst'];
					$info[$id]['nomEst'] 	= $rs->fields['nomEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_estado1($id)
	{
			$sql = "SELECT * FROM estado where idEst=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idEst'];
					$info[$id]['idEst']		= $rs->fields['idEst'];
					$info[$id]['nomEst'] 	= $rs->fields['nomEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}	
} 
?>