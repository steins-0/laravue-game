import VueRouter from 'vue-router';

import Home from '../views/admin/Home';

// Races and classes
import Origins from '../views/admin/origins/Origins';

// Units
import Soldiers from '../views/admin/units/Soldiers';
import Abilities from '../views/admin/abilities/Abilities'
import Perks from "../views/admin/abilities/Perks";


// Items
import Items from '../views/admin/items/Items';

const admin = '/admin';

export default new VueRouter({
    mode: 'history',
    routes: [
        {path: admin, component: Home},

        // Units
        {path: `${admin}/soldiers`, component: Soldiers},
        {path: `${admin}/abilities`, component: Abilities},
        {path: `${admin}/perks`, component: Perks},


        {path: `${admin}/origins`, component: Origins}, // The place where the classes and races are created/modified

        // Items
        {path: `${admin}/items`, component: Items}
    ]
})
