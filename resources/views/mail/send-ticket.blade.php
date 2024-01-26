<!DOCTYPE html>
<html>
<head>
    <title>QR Code Email</title>
    <style>
    .highlight {
        font-weight: bold;
    }
    </style>
</head>
<body>
    <p>Hallo {{ $name }} 👋 , give this ticket to the staff to enter the museum.</p>
    <div class="highlight">Ticket ID : {{ $ticketId }}</div>
    @php
      $qrCodeAsPng = QrCode::format('png')->size(200)->generate($url)->toHtml();
    @endphp
      <img src="{{ $message->embedData($qrCodeAsPng, 'nameForAttachment.png') }}" />
</body>
</html>


