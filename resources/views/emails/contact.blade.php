<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">

        <!-- En-tête -->
        <div style="background: #0d6efd; color: #ffffff; padding: 20px; text-align: center;">
            <h2 style="margin: 0;">📩 Nouveau message de contact</h2>
        </div>

        <!-- Contenu -->
        <div style="padding: 20px; color: #333;">
            <p><strong>👤 Nom :</strong> {{ $details['name'] }}</p>
            <p><strong>📧 Email :</strong> <a href="mailto:{{ $details['email'] }}" style="color: #0d6efd;">{{ $details['email'] }}</a></p>
            <p><strong>📌 Objet :</strong> {{ $details['subject'] }}</p>

            <hr style="margin: 20px 0; border: none; border-top: 1px solid #ddd;">

            <p><strong>💬 Message :</strong></p>
            <p style="background: #f9f9f9; padding: 15px; border-left: 4px solid #0d6efd; border-radius: 5px;">
                {{ $details['content'] }}
            </p>
        </div>

        <!-- Pied de page -->
        <div style="background: #f1f1f1; padding: 15px; text-align: center; font-size: 12px; color: #777;">
            <p>Email automatique envoyé depuis le formulaire de contact de votre site 🚀</p>
        </div>

    </div>

</body>
</html>
