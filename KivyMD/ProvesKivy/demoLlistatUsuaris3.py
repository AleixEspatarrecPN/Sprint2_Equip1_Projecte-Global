from kivymd.app import MDApp
from kivymd.uix.screen import Screen
from kivymd.uix.list import MDList, ThreeLineListItem, ThreeLineIconListItem
from kivy.uix.scrollview import ScrollView
from kivymd.uix.list import IconLeftWidget

class DemoLlista(MDApp):

    def build(self):

        screen = Screen()
        #Per evitar que es superpose la informació utilitzarem MDList()
        list_view = MDList()
        #Per poder tenir la barreta per moure la info
        scroll = ScrollView()
        #L'afegirem a la llista
        scroll.add_widget(list_view)

        #Crearem un bucle per afegir més info d'exemple a la llista
        for i in range(20):
            icon = IconLeftWidget(icon="android")
            items = ThreeLineIconListItem(text='Nom usuari ' + str(i), secondary_text='Nom empresa', tertiary_text='Correu')
            
            items.add_widget(icon)
            list_view.add_widget(items)



        screen.add_widget(scroll)
        return screen


DemoLlista().run()