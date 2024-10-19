import { HydraAdmin,  ResourceGuesser } from "@api-platform/admin";
import ListeEdit from "./ListeEdit";
const App = () => (
  <HydraAdmin
    entrypoint={window.origin}
    title="API Platform admin"
  >
  <ResourceGuesser  name="users"/>
  <ResourceGuesser  name="listes" edit={ListeEdit}/>
  <ResourceGuesser  name="liste_categories"/>
  </HydraAdmin>
);

export default App;
