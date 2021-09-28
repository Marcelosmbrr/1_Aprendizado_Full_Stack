import style from '../Menus.module.css';

// ==== Importação do componente de Link do roteamento, da lib de roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação do hook useRouteMatch da lib de roteamento ==== //
// Será usado para fazer rotas encadeadas // https://reactrouter.com/web/example/nesting
import { useRouteMatch } from "react-router-dom";

// ==== Importação dos componentes do Material UI para o botão de ícone ==== //
import { makeStyles } from '@material-ui/core/styles';
import IconButton from '@material-ui/core/IconButton';
import UserIcon from '@material-ui/icons/AccountCircle';

// ==== Importação dos componentes do Material UI para o menu dropdown ==== //
import * as React from 'react';
import Button from '@material-ui/core/Button';
import ClickAwayListener from '@material-ui/core/ClickAwayListener';
import Grow from '@material-ui/core/Grow';
import Paper from '@material-ui/core/Paper';
import Popper from '@material-ui/core/Popper';
import MenuItem from '@material-ui/core/MenuItem';
import MenuList from '@material-ui/core/MenuList';
import Stack from '@material-ui/core/Stack';

export function UserMenu() {

  // ==== Hook useRouteMatch ==== //
  let { path, url } = useRouteMatch();

  const [open, setOpen] = React.useState(false);
  const anchorRef = React.useRef(null);

  const handleToggle = () => {
    setOpen((prevOpen) => !prevOpen);
  };

  const handleClose = (event) => {
    if (anchorRef.current && anchorRef.current.contains(event.target)) {
      return;
    }

    setOpen(false);
  };

  function handleListKeyDown(event) {
    if (event.key === 'Tab') {
      event.preventDefault();
      setOpen(false);
    } else if (event.key === 'Escape') {
      setOpen(false);
    }
  }

  // return focus to the button when we transitioned from !open -> open
  const prevOpen = React.useRef(open);
  React.useEffect(() => {
    if (prevOpen.current === true && open === false) {
      anchorRef.current.focus();
    }

    prevOpen.current = open;
  }, [open]);

  return (
    <Stack direction="row" spacing={2}>
      <div>
        <IconButton aria-label="settings-menu" style={{color: "#222"}} ref={anchorRef} aria-controls={open ? 'menu-list-grow' : undefined} aria-haspopup="true" onClick={handleToggle}>
          <UserIcon />
        </IconButton>
        <Popper open={open}  anchorEl={anchorRef.current} role={undefined}  placement="bottom-start" transition disablePortal>
          {({ TransitionProps, placement }) => (
            <Grow
              {...TransitionProps}
              style={{
                transformOrigin:
                  placement === 'bottom-start' ? 'left top' : 'left bottom',
              }}
            >
              <Paper>
                <ClickAwayListener onClickAway={handleClose}>
                  <MenuList
                    autoFocusItem={open}
                    id="composition-menu"
                    aria-labelledby="composition-button"
                    onKeyDown={handleListKeyDown}
                  >
                    <MenuItem onClick={handleClose}><Link to = {`${url}/user/mydata`} className = {style.text_option}>Meus dados</Link></MenuItem>
                    <MenuItem onClick={handleClose}> <Link to = "/" className = {style.text_option}>Sair</Link></MenuItem>
                  </MenuList>
                </ClickAwayListener>
              </Paper>
            </Grow>
          )}
        </Popper>
      </div>
    </Stack>
  );
}