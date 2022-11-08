from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.button import MDFlatButton

class MainApp(MDApp):

    def build(self):
        screen = Screen()
        btn_flat =  MDFlatButton(text = 'Hello World!') #Text del botó
        screen.add_widget(btn_flat) 

        self.theme_cls.theme_style="Dark" #El color del fons canviarà
        return screen
MainApp().run()