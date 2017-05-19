Hallo,<br>
<br>
Hier zijn uw tickets:<br>
<br>
@foreach($ticketarray as $ticket)
    <h5>Ticket</h5>
    <img src="/src/tickets/{{ $ticket->id }}.jpg"><br>
@endforeach
<br>
Hier zijn uw maaltijden:<br>
<br>
@foreach($maaltijdarray as $maaltijd)
    <h5>Maaltijd</h5>
    <img src=/src/maaltijden/{{ $maaltijd->id }}.jpg"><br>
@endforeach