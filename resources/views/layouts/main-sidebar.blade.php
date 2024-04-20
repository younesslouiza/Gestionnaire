
<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Snif<span>ly</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Gestion de Stock</li>
        <li class="nav-item">
          <a href="{{URL('/')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Tableau de bord</span>
          </a>
        </li>
        <!--produit-->
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Produit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{url('/produit')}}" class="nav-link">Produit</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/categorie')}}" class="nav-link">Catégories</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/marque')}}" class="nav-link">Marque</a>
              </li>
            </ul>
          </div>
        </li>
        <!--vent-->
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Vente</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{url('/client')}}" class="nav-link">Client</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/devis')}}" class="nav-link">Devis</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/bon_de_commande')}}" class="nav-link">Bon de commande</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/facture')}}" class="nav-link">Facture</a>
              </li>
              <li class="nav-item">
                <a href="{{url('/reglement')}}" class="nav-link">Réglement</a>
              </li>
            </ul>
          </div>
        </li>
        <!--achat-->
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Achats</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{url('/fournisseur')}}" class="nav-link">Fournisseur</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/owl-carousel.html" class="nav-link"> Bon de commande</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/buttons.html" class="nav-link">Bon de Réception</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/buttons.html" class="nav-link">Facture</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/buttons.html" class="nav-link">Réglement</a>
              </li>

            </ul>
          </div>
        </li>
        <!--achat-->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Comptes</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/forms/basic-elements.html" class="nav-link">Clients</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced-elements.html" class="nav-link">Clients </a>
                </li>

              </ul>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="link-title">Paramétrage</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/charts/apex.html" class="nav-link">Entreprise</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">Entreprise</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">Entrepôt</a>
              </li>

            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
