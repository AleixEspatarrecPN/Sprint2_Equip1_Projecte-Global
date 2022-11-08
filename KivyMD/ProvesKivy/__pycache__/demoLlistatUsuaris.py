from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.list import MDList, OneLineListItem
from kivy.uix.scrollview import ScrollView

class DemoLlista(MDApp):

    def build(self):

        screen = Screen()
        #Per evitar que es superpose la informació utilitzarem MDList()
        list_view = MDList()
        #Per poder tenir la barreta per moure la info
        scroll = ScrollView()
        #L'afegirem a la llista
        scroll.add_widget(list_view)

        item1 = OneLineListItem(text='Item1') 
        item2 = OneLineListItem(text='Item2')
        item3 = OneLineListItem(text='Item3')

        list_view.add_widget(item1)
        list_view.add_widget(item2)
        list_view.add_widget(item3)

        screen.add_widget(scroll)

        return screen


DemoLlista().run()