import random

angka = random.randint(1, 50)

print('=' * 40)
print('Tebak angkanya, antara 1-50:')
print('=' * 40)

batas_percobaan = 10
for percobaan in range(batas_percobaan):
    jawaban = int(input(f'[Percobaan {percobaan +1}] Ayo, Tebak aku!'))
                        
    if jawaban == angka:
        print('Selamat! Tebakanmu benar.')
        break
    else:
        print(
            'Tebakanmu terlalu'
            ' kecil. Ayo tebak lagi!' if jawaban < angka else ' Tebakanmu terlalu besar. Ayo tebak lagi!'
            )
else:
     print(
         f'Waduh, Kamu sudah {batas_percobaan} x salah nih :('
        )