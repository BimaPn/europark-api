<!DOCTYPE html>
<html>
<head>
    <title>QR Code Email</title>
</head>
<body>
    <p>Hallo {{ $name }} 👋 , give this ticket to the staff to enter the museum.</p>
    @php
      $qrCodeAsPng = QrCode::format('png')->size(200)->generate($url)->toHtml();
    @endphp
      <img src="{{ $message->embedData($qrCodeAsPng, 'nameForAttachment.png') }}" />
</body>
</html>


