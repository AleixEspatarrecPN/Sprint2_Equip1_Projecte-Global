from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.button import MDFlatButton

class MainApp(MDApp):

    def build(self):
        screen = Screen()
        btn_flat =  MDFlatButton(text = 'Hello World!')
        screen.add_widget(btn_flat)
        return screen
MainApp().run()