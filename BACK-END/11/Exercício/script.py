from flask import Flask, render_template, request

app = Flask(__name__)

@app.route("/login")
def login():
    return render_template("login.html")

@app.route('/usuario', methods = ["POST","GET"]) 
def result():
    if request.method == "POST": 
        result = request.form
        return render_template ("usuario.html", result = result )

if __name__ == "__main__":
    app.run()