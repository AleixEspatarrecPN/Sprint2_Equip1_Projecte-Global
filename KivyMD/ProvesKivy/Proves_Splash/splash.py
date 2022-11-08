from kivy.uix.screenmanager import ScreenManager
from kivy.core.window import Window
from kivy.lang import Builder
from kivymd.app import MDApp
from kivy.clock import Clock
from demoLogin3 import demoLogin3

Window.size = (300,500)

class Splash(MDApp):
    def build(self):
        global a1
        a1 = ScreenManager()
        a1.add_widget(Builder.load_file("splash2.kv"))
        a1.add_widget(Builder.load_file("demoLogin3.py"))
        return a1
    
    def on_start(self):
        Clock.schedule_once(demoLogin3, 5)
    
    def login(*args):
        a1.current = 'demoLogin3'