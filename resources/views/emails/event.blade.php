<!DOCTYPE html>
<html>
<head>
    <style>
        :root { 
            --primary: #e83e8c; 
            --secondary: #f7ceab; 
        }
        body { 
            font-family: 'Arial', sans-serif; 
            line-height: 1.6; 
            max-width: 600px; 
            margin: 0 auto; 
        }
        .header { 
            background: var(--primary); 
            padding: 20px; text-align: 
            center; 
        }
        .header img { 
            height: 60px; 
        }
        .content { 
            padding: 20px; 
            background: #fff; 
        }
        .footer { background: #343a40; 
            color: white; 
            padding: 15px; 
            text-align: center; 
            font-size: 12px; 
        }
        .btn { 
            background: var(--primary); 
            color: white!important; 
            padding: 10px 20px; 
            text-decoration: none; 
            border-radius: 5px; 
            display: inline-block; 
        }
    </style>
</head>

<body>
    <!--intestazione email-->
    <div class="header">
        <img src="{{ asset('images/immagine.jpg') }}" alt="FlowerFormula Logo" style="height: 50px;">
    </div>
    
    <div class="content">
        <h1>Ciao {{ $user->name }},</h1>
        <p>Ecco la nostra offerta speciale per <strong>{{ $event->name }}</strong>:</p>
        
        <p>{!! nl2br($event->content) !!}</p>
        
        <a href="{{ url('http://127.0.0.1:8000') }}" class="btn">
            Scopri l'offerta
        </a>
    </div>
    
    <div class="footer">
        <p>© {{ date('Y') }} FlowerFormula. Tutti i diritti riservati.</p>
    </div>
</body>
</html>