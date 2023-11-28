def generate_key(plaintext):
    import os
    key = os.urandom(len(plaintext))
    return key

def encrypt(plaintext, key):
    ciphertext = ''.join([chr(ord(p) ^ ord(k)) for p, k in zip(plaintext, key)])
    return ciphertext

def decrypt(ciphertext, key):
    decrypted_text = ''.join([chr(ord(c) ^ ord(k)) for c, k in zip(ciphertext, key)])
    return decrypted_text

def main():
    plaintext = input("Masukkan plaintext: ")
    key = input("Masukkan kunci (panjang kunci harus sama dengan panjang plaintext): ")

    if len(key) != len(plaintext):
        print("Panjang kunci harus sama dengan panjang plaintext.")
        return

    ciphertext = encrypt(plaintext, key)
    print(f"\nHasil enkripsi: {ciphertext}")

    decrypted_text = decrypt(ciphertext, key)
    print(f"Hasil dekripsi: {decrypted_text}")

if __name__ == "__main__":
    main()
