Halo, {{$user->name}}
<br><br>
Pembayaran tiketmu sudah diterima.
<br><br>
Jangan lupa untuk datang ke acara {{$ticket->event->name}} pada :<br>
Tanggal : {{DateTime::createFromFormat('Y-m-d', $ticket->event->date)->format('d-m-Y')}}<br>
Waktu : {{DateTime::createFromFormat('H:i:s', $ticket->event->timeStart)->format('H:i') . ' '}} {{$ticket->event->timeEnd != null ? ' - ' . DateTime::createFromFormat('H:i:s', $ticket->event->timeEnd)->format('H:i') : ''}} <br>
Tempat : {{$ticket->event->location}}
<br><br><br>
Silahkan gunakan QR Code pada attachment untuk checkin pada saat event.
<br><br>






