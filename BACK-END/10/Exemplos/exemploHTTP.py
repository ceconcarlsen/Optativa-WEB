from flask import Flask, app, redirect, url_for, request
import flask

app = Flask(__name__)

@app.route("/success/<name>") #rota de sucesso
def success(name):
    print ("Welcome %s" % name)

@app.route("http://localhost:5000/login", methods = ["POST", "GET"])
def login():
    if request.method == "POST": #se for POST
        user = request.form["nm"] #recuperando dados do formulário
        return redirect(url_for("success", name = user)) #redireciona para a url success

    else: #se for GET
        user = request.args.get("nm")
        return redirect(url_for("success", name = user))

if __name__ == "__main__":
    app.run(debug = True)