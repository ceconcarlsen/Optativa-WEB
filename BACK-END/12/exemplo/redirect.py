from flask import Flask, redirect, render_template, request, url_for
from werkzeug.exceptions import abort

app = Flask(__name__)

@app.route("/")
def index():
    return render_template('log_in.html')

@app.route('/login', methods = ['GET','POST'])
def login():
    if request.method == 'POST': #se for POST e o username admin success, senão abort(401)
        if request.form['username'] == 'admin':
            return redirect(url_for('success'))
        else:
            abort(401) 
            """
            Unauthorized
            The server could not verify that you are authorized to access the URL requested. 
            You either supplied the wrong credentials (e.g. a bad password), or your browser doesn't understand how to supply the credentials required.
            """
    else:
        return redirect(url_for('index'))# se não for POST

@app.route("/success")
def success():
    return "Logged in Successfully"

if __name__ == "__main__":
    app.run(debug= True)

