from flask import Flask, app
from flask.helpers import url_for
from werkzeug.utils import redirect

app = Flask(__name__)

@app.route("/admin") #localhost:5000/admin executa a função hello_admin
def hello_admin():
    return ("hello admin")

@app.route("/guest/<guest>") #localhost:5000/guest/<variável> executa a função hello_guest com variável passada
def hello_guest(guest):
    return ("hello %s" % guest)

#função que redirecionará para a route admin ou route guest dependendo da entrada
@app.route("/user/<name>") # localhost:5000/user/gabriel -> hello_guest(gabriel)
def hello_user(name):      # localhost:500/user/admin -> hello_admin 
    if name == "admin":
        return redirect(url_for("hello_admin"))
    else:
        return redirect(url_for("hello_guest", guest = name ))

if __name__ == "__main__": 
    app.run(debug = True)