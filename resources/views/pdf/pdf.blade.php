Hallo,<br>
<br>
Hier zijn uw tickets:<br>
<br>
@foreach($ticketarray as $ticket)
    <h5>Ticket</h5>
    <img src="http://damp-reef-29348.herokuapp.com/src/tickets/{{ $ticket->id }}.jpg"><br>
@endforeach
<br>
Hier zijn uw maaltijden:<br>
<br>
@foreach($maaltijdarray as $maaltijd)
    <h5>Maaltijd</h5>
    <img src="http://damp-reef-29348.herokuapp.com/src/maaltijden/{{ $maaltijd->id }}.jpg"><br>
@endforeach