
		$query.= "	CREATE TEMP TABLE orders
					(
						MatType char(2),
						bnumber int,
						title varchar(20001),
						holdcount float,
						itemcounts float,
						copies float);";


while ($row = pg_fetch_assoc($sierraResult)) 
		{ 
			$mattype = $row['mattype'];
			$bnumber="b".$row['bnumber']."a";
			$title = cleanFromSierra("title", $row['title']);
			$hcount = $row['holdcount'];
			$icount = $row['itemcounts'];
			$ocount = $row['copies'];

			switch($mattype)
			{
				case "a ":
					$material = "Book";
					break;
				case "b ":
					$material = "Book on CD";
					break;
				case "d ":
					$material = "DVD";
					break;
				case "j ":
					$material = "CD";
					break;
				case "l ":
					$material = "Large Print";
					break;
				case "br":
					$material = "Blu-Ray";
					break;
				default:
					$material="Not Defined";
				
			}