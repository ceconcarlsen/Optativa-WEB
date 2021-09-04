from flask import Flask, request, session, url_for, escape, redirect
import os 

app = Flask(__name__)
app.secret_key = os.urandom(24)
print("chave secreta" , app.secret_key) # toda vez gerará uma nova chave, aplicações persistentes NÃO irão funcionar --> PARA ESTUDO (OK)

#raiz index
@app.route('/')
def index():
    if 'username' in session:
        username = session['username']
        return 'logged in as ' +'<b>'+username+'</b>' + '<br>' + '<b>Click <a href="/logout"> here </a> to log out </b>'
        
    return 'You are not logged in <br>' + '<b>Click <a href="/login"> here </a> to log in </b>' #1º vez que abrir a aplicação

#login
@app.route('/login', methods=['GET','POST'])
def login():
    if request.method == 'POST': #POST dados para o index
        session['username'] = request.form['username']
        return redirect(url_for('index'))

    return '<form action="" method="POST"><p><input type="text"name="username"/></p><p><input type="submit" value="login"/></p></form>'
              
#logout
@app.route('/logout')
def logout():
    session.pop('username',None)
    return redirect(url_for('index'))


if __name__ == "__main__":
    app.run(debug = True)



        
    