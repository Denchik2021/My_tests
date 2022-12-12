import qrcode
from qrcode.image.styledpil import StyledPilImage
from qrcode.image.styles.colormasks import RadialGradiantColorMask
from qrcode.image.styles.moduledrawers import RoundedModuleDrawer
from transliterate import translit


# генератор qr-кодов изображений

def generate():
    data = input("Введите текст для зашифровки в qr: \n")

    qr = qrcode.QRCode(version=1,
                       box_size=10,
                       border=5)

    qr.add_data(data)
    qr.make(fit=True)
    img = qr.make_image(fill_color='blue',
                        back_color='white')
    text = translit(data, language_code='ru', reversed=True)
    newName = (text[:5])
    newName = newName.replace(' ', '')
    img.save(f'{newName}.png')

    return f'{newName}.png'


if __name__ == '__main__':
    print("Создали QR: " + generate())
