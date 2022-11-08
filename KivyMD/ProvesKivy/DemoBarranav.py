from kivymd.app import MDApp
from kivy.lang import Builder
from kivy.uix.boxlayout import BoxLayout

# --NO COMPILA - però sintàcticament està bé
screen_helper = """
Screen:
    BoxLayout:
        orientation: 'vertical'
        MDToolbar:
            title: 'Pymeshield'
        MDLabel:
            text: 'Opcions'
            halign: 'Center'

"""

class DemoBarranav(MDApp):

    def build(self):
        screen = Builder.load_string(screen_helper)
        return screen



DemoBarranav().run()