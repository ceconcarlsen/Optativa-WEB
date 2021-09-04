from flask import Flask #import da biblioteca

app = Flask(__name__) #construtor Flask recebe o nome do módulo atual

@app.route('/') #o que a url vai apresentar quando for chamada / == localhost:5000
def diz_oi():
    return "oi"

@app.route('/en') #o que a url vai apresentar quando for chamada /en == localhost:5000/en
def say_hi():
    return "hi"

@app.route('/<name>') #url dinamicamente com variáveis (string)
def hello_name(name):
    return "hello %s" % name 

@app.route('/<int:id>') #url dinamicamente com variáveis (int)
def hello_id(id):
    return "hello %d" % id 

@app.route('/<float:media>') #url dinamicamente com variáveis (float)
def hello_media(media):
    return "hello %.2f" % media



if __name__ == '__main__':
    app.run() # inicia a aplicação



