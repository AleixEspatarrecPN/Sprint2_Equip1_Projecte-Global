########################################################################
## SPINN DESIGN CODE
# YOUTUBE: (SPINN TV) https://www.youtube.com/spinnTv
# WEBSITE: spinndesign.com

########################################################################
## IMPORTS
########################################################################
from kivy.lang import Builder
from kivy.clock import Clock
from kivy.uix.screenmanager import ScreenManager
from kivymd.app import MDApp
from kivy.core.window import Window

Window.fullscreen = False

########################################################################
## SET WINDOW SIZE
########################################################################
Window.size = (350, 600)
# Window.fullscreen = True
########################################################################
## MAIN CLASS
########################################################################
class MainApp(MDApp):
    # Global screen manager variable
    global screen_manager
    screen_manager = ScreenManager()
    
    ########################################################################
    ## Build Function
    ########################################################################
    def build(self):
        # Set App Title
        self.title="E-LEGANT"
        # Set App Theme
        self.theme_cls.primary_palette='BlueGray'
        
        # Load kv screen files to builder
        screen_manager.add_widget(Builder.load_file("splashScreen.kv"))
        screen_manager.add_widget(Builder.load_file("MainScreen.kv"))
        
        # Return screen manager
        return screen_manager
    ########################################################################
    ## This function runs on app start
    ########################################################################
    def on_start(self):
        # Delay time for splash screen before transitioning to main screen
        Clock.schedule_once(self.change_screen, 20) # Delay for 10 seconds
        
    ########################################################################
    ## This function changes the current screen to main screen
    ########################################################################
    def change_screen(self, dt):    
        screen_manager.current = "MainScreen"
########################################################################
## RUN APP
########################################################################      
MainApp().run()
########################################################################
## END ==>
########################################################################


















































