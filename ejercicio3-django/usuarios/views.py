import json
from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

def usuario_view(request):
    usuario_json = """
    {
        "Nombre": "Laura",
        "Apellidos": "Gómez Pérez",
        "Edad": "28",
        "Dni": "12345678A",
        "Email": "laura.gomez@example.com",
        "Telefono": "654321987",
        "Pagos": {
            "Enero": 20,
            "Febrero": 20,
            "Marzo": 20,
            "Abril": 0,
            "Mayo": 20,
            "Junio": 20,
            "Julio": 20,
            "Agosto": 0,
            "Septiembre": 20,
            "Octubre": 20,
            "Noviembre": 20,
            "Diciembre": 20
        }
    }
    """

    usuario = json.loads(usuario_json)

    html = f"""
    <html>
        <head><title>Datos de un Usuario</title></head>
        <body>
            <h1>Información personal</h1>
            {print_usuario(usuario)}
        </body>
    </html>
    """
    return HttpResponse(html)

def print_usuario(usuario):
    texto = ""
    for k, v in usuario.items():
        if k != "Pagos":
            texto += f"<p><strong>{k}:</strong> {v}</p>"
        else:
            texto += f"""
            <p><strong>{k}:</strong></p>
            <table border=1 >
            <thead><tr><th>Mes</th><th>Importe</th></tr></thead>
            <tbody>
            """
            for mes, importe in v.items():
                texto += f"<tr><td><strong>{mes}</strong></td><td style='background-color:{'#ff7f7f' if importe == 0 else 'transparent' };'>{importe}</td></tr>"
            texto += f"""
            </tbody>
            </table>
            """
    return texto
