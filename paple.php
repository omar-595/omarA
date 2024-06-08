<?php
		include('db.php');
			$query="select * from chat ORDER BY id DESC";
			$ren= mysqli_query($con , $query);
			while ($row=mysqli_fetch_array($ren)) {
				$name = $row['name'];
				$masg = $row['masg'];
				$data = $row['data'];
			
			?>
			<div id="chatdata">
				<span class="scr"><?php echo $name; ?></span>
				<span class="dot">:</span>
				<br><span class="ker"><?php echo $data; ?></</span>
				<br><span class="ver"><?php echo $masg; ?></span>
			</div>
			<?php
		}
			?>