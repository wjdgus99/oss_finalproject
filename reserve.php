<html>
	<head><title>Handong Library Service</title></head>
	<body>
		<form action="result.php" method="POST">
		<p><h2>Handong Library Seat Reservation</h2>
		<?php
			echo"<imp src='handong.png'/>";
		?>

		<p>
		이름: <input type="text" name="name"><br>
		학번: <input type="text" name="stdid" size=40><br>
		<p>
		자리:
		<p>
		<input type="checkbox" name="seat1" value="1,">1
		<input type="checkbox" name="seat2" value="2,">2
		<input type="checkbox" name="seat3" value="3,">3
		<input type="checkbox" name="seat4" value="4,">4
		<input type="checkbox" name="seat5" value="5,">5
		<p>
		<input type="checkbox" name="seat6" value="6,">6
		<input type="checkbox" name="seat7" value="7,">7
		<input type="checkbox" name="seat8" value="8,">8
		<input type="checkbox" name="seat9" value="9,">9
		<input type="checkbox" name="seat10" value="10,">10
		<p>
		예약 시간:
		<select name="start_time">
			<option value="0.0">00:00
			<option value="0.5">00:30
			<option value="1.0">01:00
			<option value="1.5">01:30
			<option value="2.0">02:00
			<option value="2.5">02:30
			<option value="3.0">03:00
			<option value="3.5">03:30
			<option value="4.0">04:00
			<option value="4.5">04:30
			<option value="5.0">05:00
			<option value="5.5">05:30
			<option value="6.0">06:00
			<option value="6.5">06:30
			<option value="7.0">07:00
			<option value="7.5">07:30
			<option value="8.0">08:00
			<option value="8.5">08:30
			<option value="9.0">09:00
			<option value="9.5">09:30
			<option value="10.0">10:00
			<option value="10.5">10:30
			<option value="11.0">11:00
			<option value="11.5">11:30
			<option value="12.0">12:00
			<option value="12.5">12:30
			<option value="13.0">13:00
			<option value="13.5">13:30
			<option value="14.0">14:00
			<option value="14.5">14:30
			<option value="15.0">15:00
			<option value="15.5">15:30
			<option value="16.0">16:00
			<option value="16.5">16:30
			<option value="17.0">17:00
			<option value="17.5">17:30
			<option value="18.0">18:00
			<option value="18.5">18:30
			<option value="19.0">19:00
			<option value="19.5">19:30
			<option value="20.0">20:00
			<option value="20.5">20:30
			<option value="21.0">21:00
			<option value="21.5">21:30
			<option value="22.0">22:00
			<option value="22.5">22:30
			<option value="23.0">23:00
			<option value="23.5">23:30
			</select>
		<select name="end_time">
			<option value="0.0">00:00
			<option value="0.5">00:30
			<option value="1.0">01:00
			<option value="1.5">01:30
			<option value="2.0">02:00
			<option value="2.5">02:30
			<option value="3.0">03:00
			<option value="3.5">03:30
			<option value="4.0">04:00
			<option value="4.5">04:30
			<option value="5.0">05:00
			<option value="5.5">05:30
			<option value="6.0">06:00
			<option value="6.5">06:30
			<option value="7.0">07:00
			<option value="7.5">07:30
			<option value="8.0">08:00
			<option value="8.5">08:30
			<option value="9.0">09:00
			<option value="9.5">09:30
			<option value="10.0">10:00
			<option value="10.5">10:30
			<option value="11.0">11:00
			<option value="11.5">11:30
			<option value="12.0">12:00
			<option value="12.5">12:30
			<option value="13.0">13:00
			<option value="13.5">13:30
			<option value="14.0">14:00
			<option value="14.5">14:30
			<option value="15.0">15:00
			<option value="15.5">15:30
			<option value="16.0">16:00
			<option value="16.5">16:30
			<option value="17.0">17:00
			<option value="17.5">17:30
			<option value="18.0">18:00
			<option value="18.5">18:30
			<option value="19.0">19:00
			<option value="19.5">19:30
			<option value="20.0">20:00
			<option value="20.5">20:30
			<option value="21.0">21:00
			<option value="21.5">21:30
			<option value="22.0">22:00
			<option value="22.5">22:30
			<option value="23.0">23:00
			<option value="23.5">23:30
			</select>
			<br>
		<p>
		<input type="submit" vlaue="제출">
	</form>
	</body>
</html>
